<template>
    <div class="navigation-bar">
        <div class="nav-container">
            <div class="nav-logo">
                <img class="nav-img" src="../assets/logo.png" alt="">
                <h1>Student Management</h1>
            </div>
            <div class="profiles">
                <!-- <h1>Profile Section here</h1> -->
                <i class="fa fa-user user-icon" aria-hidden="true"></i>
                <span>Erblin Berisha</span>
                <p><a href="/" class="logout">Logout</a></p>
            </div>
        </div> <!-- /nav-container -->

        <nav>
            <router-link to="/users">Home</router-link> |
            <router-link to="/archives">Archive</router-link>
        </nav>
    </div>
</template>