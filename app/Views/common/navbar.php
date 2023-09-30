<!-- <h1>NAVBAR</h1>
<?php echo $user_id ?> -->
<style {csp-style-nonce}>
    .main-navbar {
        width: 350px;
        border-right: 1px solid #CECECE;
    }
    .navbar-wrap {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        padding: 16px 35px;
    }
    .navbar-logo-wrapper,
    .navbar-user-details-wrapper,
    .navbar-contents-wrapper,
    .navbar-logout-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .navbar-top {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }
    .initial-circle {
        background-color: #4495FA;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: #FFFFFF;
        font-weight: 700;
    }
</style>
<div class="main-navbar">
    <div class="navbar-wrap">
        <div class="navbar-top">
            <div class="navbar-logo-wrapper">
                <img src="/assets/logo.png" alt="" width="65px">
            </div>
            <div class="navbar-user-details-wrapper">
                <span class="initial-circle">T</span>
                <span class="user-name">Thineshraj</span>
                <span class="user-email">thineshtj05@gmail.com</span>
            </div>
            <div class="navbar-contents-wrapper">
                <div class="dashboard-wrap">
                    <span>Dashboard</span>
                </div>
                <div class="performance-wrap">
                    <span>Performance</span>
                </div>
            </div>
        </div>
        <div class="navbar-bottom">
            <div class="navbar-logout-wrapper">
                <span>Logout</span>
            </div>
        </div>
    </div>
</div>