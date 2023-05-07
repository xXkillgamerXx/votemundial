<template>
    <div>
        <div class="time-number" v-text="hoursTens">0</div>
        <div class="time-number" v-text="hoursUnits">0</div>
        <div class="text-block-5">:</div>
        <div class="time-number" v-text="minutesTens">0</div>
        <div class="time-number" v-text="minutesUnits">0</div>
        <div class="text-block-5">:</div>
        <div class="time-number" v-text="secondsTens">0</div>
        <div class="time-number" v-text="secondsUnits">0</div>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    props: {
        end_date : String,
    },
    data(){
        return {
            hoursTens : 0,
            hoursUnits : 0,
            minutesTens : 0,
            minutesUnits : 0,
            secondsTens : 0,
            secondsUnits : 0,
            interval : null,
        }
    },
    mounted() {
        this.updateTimer();

        this.interval = setInterval(this.updateTimer, 1000);
    },
    methods :{
        updateTimer() {
            const now = moment();
            const diff = moment(this.end_date).diff(now);

            const duration = moment.duration(diff);

            const hours = duration.hours();
            const minutes = duration.minutes();
            const seconds = duration.seconds();

            this.hoursTens = Math.floor(hours / 10);
            this.hoursUnits = hours % 10;
            this.minutesTens = Math.floor(minutes / 10);
            this.minutesUnits = minutes % 10;
            this.secondsTens = Math.floor(seconds / 10);
            this.secondsUnits = seconds % 10;

            if (this.hoursTens <= 0 && this.hoursUnits <= 0 && this.minutesTens <= 0 && this.minutesUnits <= 0 && this.secondsTens <= 0 && this.secondsUnits <= 0)
            {
                this.hoursTens = 0;
                this.hoursUnits = 0;
                this.minutesTens = 0;
                this.minutesUnits = 0;
                this.secondsTens = 0;
                this.secondsUnits = 0;

                clearInterval(this.interval);
            }
        }
    }
};
</script>

<style scoped>

</style>
