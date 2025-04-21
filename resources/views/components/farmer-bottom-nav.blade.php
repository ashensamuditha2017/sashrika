<style>
    .bottom-nav {
        position: fixed;
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #2b8a3e;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1px 1px;
        width: 95%;
        border-radius: 50px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        font-family: sans-serif;
    }

    .nav-item {
        flex: 1;
        text-align: center;
    }

    .nav-item a,
    .center-shape a {
        color: white;
        text-decoration: none;
        font-size: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .nav-item i {
        font-size: 22px;
        margin-bottom: 5px;
    }

    .center-icon {
        position: relative;
        top: -30px;
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
    }

    .center-shape {
        background-color: #2b8a3e;
        border: 4px solid white;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .center-shape i {
        font-size: 26px;
    }

    .center-shape div {
        font-size: 13px;
        margin-top: 2px;
    }

    a.active, .center-shape a.active {
        color: #ffd700;
    }

    a.active i, .center-shape a.active i {
        color: #ffd700;
    }

</style>

<div class="bottom-nav">
    <div class="nav-item">
        <a href="{{ route('farmer.predictions') }}" class="{{ request()->routeIs('farmer.predictions') ? 'active' : '' }}">
            <i class="material-icons-outlined">show_chart</i>
            <div>Predictions</div>
        </a>
    </div>
    <div class="nav-item">
        <a href="{{ route('farmer.reports') }}" class="{{ request()->routeIs('farmer.reports') ? 'active' : '' }}">
            <i class="material-icons-outlined">warning</i>
            <div>Report</div>
        </a>
    </div>
    <div class="center-icon">
        <div class="center-shape">
            <a href="{{ route('farmer.home') }}" class="{{ request()->routeIs('farmer.home') ? 'active' : '' }}">
                <i class="material-icons-outlined">home</i>
                <div>Home</div>
            </a>
        </div>
    </div>
    <div class="nav-item">
        <a href="{{ route('messages.index') }}" class="{{ request()->routeIs('messages.index') ? 'active' : '' }}">
            <i class="material-icons-outlined">mail</i>
            <div>Messages</div>
        </a>
    </div>
    <div class="nav-item">
        <a href="{{ route('notifications.index') }}" class="{{ request()->routeIs('notifications.index') ? 'active' : '' }}">
            <i class="material-icons-outlined">notifications</i>
            <div>Notify</div>
        </a>
    </div>
</div>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">