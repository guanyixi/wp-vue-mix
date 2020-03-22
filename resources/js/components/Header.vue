<template>
    <header>
        <h3>LOGO</h3>
        <nav>
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/about">About</router-link></li>
            </ul>
        </nav>
        <hr>
    </header>
</template>


<style lang="scss">
    header{
        ul{
            display:flex;
            margin:15px 0;
            padding:0;
            li{
                list-style-type: none;
                margin:0 15px 0 0;
            }
        } 
    } 
</style>