<template>
    <nav class="lys-nav container-fluid">
        <div class="container">
            <router-link class="logo-container" to="/">
                <img class="logo" :src="'../../images/lys-logo.png'">
            </router-link>
            <router-link class="nav-links spacing"
                v-bind:class="{active:profile}"
                @click="profile=1"
                to="/profile">Profile</router-link>
            <router-link class="nav-links"
                v-bind:class="{active:practice}"
                @click="practice=1"
                to="/practice">Practice Areas</router-link>
            <router-link class="nav-links"
                v-bind:class="{active:articles}"
                @click="articles=1"
                to="/articles">News</router-link>
            <router-link class="nav-links"
                v-bind:class="{active:team}"
                @click="team=1"
                to="/team">Our Team</router-link>
            <router-link class="nav-links"
                v-bind:class="{active:contact}"
                @click="contact=1"
                to="/contact">Contact</router-link>
        </div>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                profile: 0,
                practice: 0,
                articles: 0,
                team: 0,
                contact: 0
            }
        },
    }
</script>