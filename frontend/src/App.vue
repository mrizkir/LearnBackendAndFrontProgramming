<template>
    <div>
        Hello,
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name:'App',
    created ()
    {
        this.fetchDataUser();
    },
    mounted()
    {
       
    },
    data () 
    {
        return {
            
        }
    },

    methods: {
        fetchDataUser()
        {
            axios.get('http://localhost:8000/').then(response => {
                console.log(response);
            });
        }
    },

    computed: {

    },

    component:{

    },
    watch: {

    }
}
</script>
<style scoped>

</style>