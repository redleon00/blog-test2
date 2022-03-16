<template>
    <v-dialog v-model="dialog" persistent max-width="800px">
   
    <form
      ref="form"
      @submit.prevent="save"
      class="form-order"
      style="z-index: 999"
    >
      <v-card>
        <v-card-text>
            <div>Add your comments</div>
        <v-container>
            <v-row class="justify-content-between mt-2">
                <v-col cols="12">
                    <v-text-field
                        label="Your Name"
                        :rules="userRule"
                        hide-details="auto"
                        v-model="form.user"
                    ></v-text-field>
                    <v-text-field 
                        label="Your commnents here"
                        :rule="commentRule"
                        v-model="form.comments"
                    >
                    </v-text-field>
                </v-col>
            </v-row>
        </v-container>
        </v-card-text>
        <v-card-actions class="d-flex justify-center mt-n5">
            <v-btn
              @click="close"
              class="text-capitalize font-weight-black"
               color="orange"
               text
               

            >
              Close
            </v-btn>
            <v-btn
             
              class="text-capitalize font-weight-black"
              :disabled="disabled"
              @click="save"
              color="orange"
               text
               
            >
              Save
            </v-btn>
        </v-card-actions>
    </v-card>
    </form>
    </v-dialog>
</template>
<script>
    export default {
        props:{
            dialog:Boolean
            
        },
        data: () => ({
            zIndex:999,
            disabled: false,
            userRule: [
                value => !!value || 'Required.',
                value => (value && value.length >= 3) || 'Min 3 characters',
            ],
            commentRule:[
                value => !!value || 'Required.',
                value => (value && value.length >= 10) || 'Min 10 characters',
            ],
            form:{
                user: '',
                comments: ''
           }
            
        }),
        mounted() {
            
        },
        methods:{
            async save(){
                
                await axios.post('comments', this.form)
                this.form.user = "";
                this.form.comments = "";
                this.$emit("closeAndUpdate");
            },
            close(){
                this.$emit("closeAndUpdate");
            }
        }
    }
</script>