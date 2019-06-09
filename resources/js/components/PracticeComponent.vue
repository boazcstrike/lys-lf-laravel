<template>
    <div class="practice-container">
        <div class="practice-icon-container">
            <i :class="'fa fa-'+icon"></i>
        </div>
        <div class="practice-title-container">
            <h4>
                <span>{{ practiceName.charAt(0) }}</span>
                {{ practiceName.slice(1) }}
            </h4>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'icon',
            'practiceName'
        ]
    }
</script>