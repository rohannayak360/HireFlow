<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
    <x-ui.stat-card 
        title="Applied Jobs" 
        value="24" 
        icon="fa-solid fa-briefcase" 
        color="primary"
        trend="+3"
        trendLabel="this week"
        progress="75"
    />
    
    <x-ui.stat-card 
        title="Saved Jobs" 
        value="12" 
        icon="fa-regular fa-bookmark" 
        color="warning"
        progress="40"
    />
    
    <x-ui.stat-card 
        title="Interview Invites" 
        value="4" 
        icon="fa-regular fa-calendar-check" 
        color="success"
        trend="+1"
        trendLabel="this week"
        progress="25"
    />
    
    <x-ui.stat-card 
        title="Profile Views" 
        value="156" 
        icon="fa-regular fa-eye" 
        color="info"
        trend="+24%"
        trendLabel="vs last month"
    />
</div>
