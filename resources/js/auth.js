document.addEventListener('DOMContentLoaded', () => {
    const authWrapper = document.getElementById('auth-wrapper');
    const glowElement = document.getElementById('mouse-glow');
    
    if (authWrapper && glowElement) {
        window.addEventListener('mousemove', (e) => {
            glowElement.style.left = `${e.clientX}px`;
            glowElement.style.top = `${e.clientY}px`;
        });
    }

    // Network Canvas for glowing nodes and connecting lines
    const canvas = document.getElementById('networkCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let width, height;
        let nodes = [];
        const maxDistance = 150;
        
        function resize() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            initNodes();
        }

        function initNodes() {
            nodes = [];
            const numNodes = Math.floor((width * height) / 15000);
            for (let i = 0; i < numNodes; i++) {
                nodes.push({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    vx: (Math.random() - 0.5) * 0.5,
                    vy: (Math.random() - 0.5) * 0.5,
                    radius: Math.random() * 1.5 + 0.5
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, width, height);
            
            ctx.fillStyle = 'rgba(255, 255, 255, 0.6)';
            ctx.strokeStyle = 'rgba(255, 255, 255, 0.15)';
            ctx.lineWidth = 0.5;

            // Move and draw nodes
            nodes.forEach(node => {
                node.x += node.vx;
                node.y += node.vy;

                // Bounce off edges
                if (node.x < 0 || node.x > width) node.vx *= -1;
                if (node.y < 0 || node.y > height) node.vy *= -1;

                ctx.beginPath();
                ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
                ctx.fill();
            });

            // Draw connections
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < maxDistance) {
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.stroke();
                    }
                }
            }

            requestAnimationFrame(draw);
        }

        window.addEventListener('resize', resize);
        resize();
        draw();
    }
});
