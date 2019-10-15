<template>

    <div class="footer">
        <div class="copyright">
            <p class="info phone">Call us at 02-832-9628</p>
            <p class="info email bot-text">limandsze.lf@gmail.com</p>
        </div>

        <img src={whiteLogo}>

        <div class="copyright">
            <p>{{ config('app.name') }}</p>
            <p class="bot-text">Brewed by <span>Boaz Michael Sze</span></p>
        </div>
    </div>

</template>

<script>
    import whiteLogo from '../../images/white-logo-darker.png'
    export default {}
</script>