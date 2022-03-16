<template>
  <v-card>
    <v-system-bar></v-system-bar>
    <v-toolbar flat>
      <v-toolbar-title>My Blogs</v-toolbar-title>
      <v-spacer></v-spacer>
      <div>
        <v-switch
          v-model="sticky"
          label="Sticky Banner"
          hide-details
        ></v-switch>
      </div>
    </v-toolbar>
    <v-banner
      single-line
      :sticky="sticky"
    >
      Please feel free to comments anything about ours publications

      <template v-slot:actions>
        <v-btn
          text
          color="deep-purple accent-4"
        >
          Get Online
        </v-btn>
      </template>
    </v-banner>
    <v-card-text class="grey lighten-4">
      <v-sheet
        max-width="800"
        min-height="300"
        class="mx-auto"
      >
      <publication-text></publication-text>
      <list-comments ref="list" ></list-comments>
       <div data-app>
      <form-comments
        :dialog="dialog"
        @closeAndUpdate="closeDialog"
      >

      </form-comments>
      </div>
      </v-sheet>
      
       <v-btn
        plain
        class="ml-n6 mt-3"
        @click.stop="addComment()"
      
      >
        <v-icon > mdi-plus </v-icon>
          Add Comment
      </v-btn>
      
    </v-card-text>
  </v-card>
</template>

<script>
import PublicationText from './PublicationText';
import ListComments  from './ListComments.vue';
import FormComments from './FormComments.vue';
    export default {
        components:{
            PublicationText,
            ListComments,
            FormComments
        },
        data: () => ({
            sticky: false,
            dialog: false,
            type_c: true
            }),
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
          addComment() {
            this.dialog = true;
            
          },
          closeDialog() {
            this.$refs.list.getCommnents()
            this.dialog = false;
          },
        }
    }
</script>
