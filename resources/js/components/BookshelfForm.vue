<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="./api/bookshelf" method="POST" @submit.prevent="addBookshelf()">
                    <input type="hidden" name="_token" :value="csrf">
                    <div class="form-group">
                        <input type="text" name="title" v-model="title" placeholder="Bookshelf title" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add Bookshelf" class="btn btn-info">
                    </div>
                </form>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                title: ''
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            addBookshelf(){
                axios.post('api/bookshelf',{
                    title:this.title,
                    book:this.$attrs
                });
            }
        }
    }
</script>
