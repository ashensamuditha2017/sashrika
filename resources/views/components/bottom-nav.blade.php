<style>
    .bottom-nav {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #2b8a3e;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
        border-radius: 20px 20px 0 0;
        color: white;
        font-family: sans-serif;
    }

    .nav-item {
        text-align: center;
        color: white;
        flex: 1;
        font-size: 12px;
    }

    .nav-item i {
        display: block;
        font-size: 20px;
        margin-bottom: 4px;
    }

    .nav-item a {
        color: white;
        text-decoration: none;
    }

    .nav-item a.active {
        color: #ffd700; /* Active color for text */
    }

    .nav-item a.active i {
        color: #ffd700; /* Active color for icon */
    }

    .center-icon {
        position: relative;
        top: -20px;
        z-index: 1;
        flex: 1;
        text-align: center;
    }

    .center-shape {
        background-color: #2b8a3e;
        color: white;
        padding: 10px 15px;
        border-radius: 15px;
        display: inline-block;
        width: 60px;
        height: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 2px solid white;
    }

    .center-shape a {
        color: white;
        text-decoration: none;
    }

    .center-shape a.active {
        color: #ffd700; /* Active color for text */
    }

    .center-shape a.active i {
        color: #ffd700; /* Active color for icon */
    }

    .center-shape i {
        font-size: 20px;
    }

    .center-shape div {
        font-size: 12px;
    }
</style>

<div class="bottom-nav">
    <div class="nav-item">
        <a href="{{ route('predictions.index') }}" class="{{ request()->routeIs('predictions.index') ? 'active' : '' }}">
            <i class="material-icons">insights</i>
            <div>Predictions</div>
        </a>
    </div>
    <div class="nav-item">
        <a href="{{ route('user.profile') }}" class="{{ request()->routeIs('user.profile') ? 'active' : '' }}">
            <i class="material-icons">person</i>
            <div>User</div>
        </a>
    </div>
    <div class="nav-item center-icon">
        <a href="{{ route('data.index') }}" class="{{ request()->routeIs('data.index') ? 'active' : '' }}">
            <div class="center-shape">
                <i class="material-icons">bar_chart</i>
                <div>Data</div>
            </div>
        </a>
    </div>
    <div class="nav-item">
        <a href="{{ route('reports.index') }}" class="{{ request()->routeIs('reports.index') ? 'active' : '' }}">
            <i class="material-icons">description</i>
            <div>Reports</div>
        </a>
    </div>
    <div class="nav-item">
        <a href="{{ route('settings.index') }}" class="{{ request()->routeIs('settings.index') ? 'active' : '' }}">
            <i class="material-icons">settings</i>
            <div>Settings</div>
        </a>
    </div>
</div>