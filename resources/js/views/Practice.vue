<template>
    <div class="content">
        <div class="practices container">
            <div class="title-container">
                <h2>Practice Areas</h2>
            </div>
            <div class="content-container">
                <div class="practice-col">
                    <PracticeComponent practiceName="Corporate" icon="briefcase"/>
                    <PracticeComponent practiceName="Labor" />
                    <PracticeComponent practiceName="Tax" />
                </div>
                <div class="practice-col">
                    <PracticeComponent practiceName="Intellectual Property" />
                    <PracticeComponent practiceName="Civil and Criminal Litigation" />
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