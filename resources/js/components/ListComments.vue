<template>
<div>
    <form-response
        :dialog="dialog"
        @closeAndUpdate="closeDialog"
        :id_comment="id"
        >
    </form-response>
<v-row v-if="all_comments.length > 0">
        <p v-for="c in all_comments" :key="c.id" >
            <span class="font-weight-bold">
                <strong>{{c.user}}</strong> say:
            </span>
            {{c.comments}}
            <v-row  class="d-flex flex-row-reverse">
                <v-btn
                    plain
                    class="ml-n6 mt-3 text-btn"
                    @click.stop="addResponse(c.id)"
                    v-if="c.responses.length < 3"
                    small
                >
                    add Response
                </v-btn>
                <p v-for="r in c.responses" :key="r.id"  class="d-flex flex-row-reverse">
                   
                   
                     <span class="font-weight-bold">
                       <strong>{{r.user}}</strong> response: <span>{{r.response}}</span>
                    </span>
                    
                </p>
            </v-row>  
        </p>
</v-row>
<v-row v-else>

        <p>
            No comments yet !
        </p>
    
</v-row>
</div>


    
    
    
</template>

<script>
import FormResponse from './FormResponse.vue';
    export default {
        components:{
            FormResponse
        },
        data: () => ({
            all_comments: [],
            dialog: false,
            id: 0
        }),
        mounted() {
            this.getCommnents()
        },
        methods:{
            getCommnents(){
                axios.get('comments').then(response => {
                    console.log(response.data.comments)
                    this.all_comments = response.data.comments
                })
            },
            addResponse(id){
                this.id = id;
                this.dialog = true;
            },
            closeDialog() {
             this.getCommnents()
             this.dialog = false;
          },
        }
    }
</script>
<style scoped>
.text-btn{
    font-size: 8px;
}
</style>