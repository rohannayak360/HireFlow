<div class="glass-card rounded-2xl sm:rounded-[2rem] shadow-2xl relative overflow-hidden">
    <!-- Subtle shine effect across the card -->
    <div class="absolute top-0 left-0 -ml-[100%] w-[50%] h-full bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-[-20deg] animate-[shine_8s_ease-in-out_infinite]"></div>
    
    <div class="relative z-10">
        {{ $slot }}
    </div>
</div>

<style>
@keyframes shine {
    0% { left: -100%; }
    20% { left: 200%; }
    100% { left: 200%; }
}
</style>
