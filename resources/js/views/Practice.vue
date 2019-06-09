<template>
    <div class="content">
        <div class="practices container">
            <div class="title-container">
                <h2>Practice Areas</h2>
            </div>
            <div class="content-container">
                <div class="practice-col">
                    <PracticeComponent practiceName="Corporate" icon="briefcase"/>
                    <PracticeComponent practiceName="Labor" icon="wrench"/>
                    <PracticeComponent practiceName="Tax" icon="money-check-alt"/>
                </div>
                <div class="practice-col">
                    <PracticeComponent practiceName="Intellectual Property" icon="copyright"/>
                    <PracticeComponent practiceName="Civil and Criminal Litigation" icon="user-friends"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PracticeComponent from '../components/PracticeComponent'

    export default {
        components: {
            PracticeComponent,
        }
    }
</script>