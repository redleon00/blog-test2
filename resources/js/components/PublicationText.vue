<template>
    <v-row>
        <v-col cols="12">
           <p>
               {{text1}}
            </p> 
            <p>
               {{text2}}
            </p> 
            <p>
               {{text3}}
            </p> 
            <p>
               {{text4}}
            </p> 
            <v-divider></v-divider>
            <p class="text-center">
               {{sign}}
            </p> 
        </v-col>
    </v-row>
</template>
<script>
    export default {
        data: () => ({
            text1: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed metus non nisi varius faucibus. Phasellus vitae nunc vitae lorem porta pulvinar. Nam massa tortor, porta at augue nec, lacinia bibendum mi. Duis tincidunt sagittis eros, nec porttitor lectus imperdiet id. Vestibulum faucibus, metus sit amet sollicitudin sagittis, ex sapien rhoncus lectus, sit amet vehicula lectus nibh ac augue. Cras placerat, tellus vel venenatis fringilla, eros leo placerat tellus, sit amet finibus justo nisl at massa. Nulla facilisi. Praesent in risus id quam sodales tempor nec nec mauris. Sed ut libero ipsum. Nulla lobortis, leo pretium dictum varius, nunc orci venenatis est, vitae vehicula nisl sapien eget ex. Morbi eu commodo nisl. Phasellus mattis nulla ultricies, iaculis ligula eu, gravida ligula. Proin hendrerit quam id volutpat egestas. Nulla id sodales purus. In mollis justo venenatis, euismod urna quis, molestie ante. Donec pulvinar, elit sit amet vehicula maximus, urna arcu volutpat massa, vitae suscipit metus risus vel mauris.',
            text2: 'Etiam placerat condimentum erat, eget aliquam elit tristique at. Sed urna odio, venenatis sed mauris sed, fringilla pellentesque lacus. Morbi sodales nisl nisi, non rutrum enim lacinia sed. Integer et placerat erat, vitae feugiat nisl. Donec quis magna diam. Donec a maximus ex. In pharetra, ante vel finibus convallis, mauris dui tincidunt sapien, ut aliquet dolor eros at nisl. Maecenas eu ullamcorper nisi. Phasellus lobortis commodo imperdiet. Sed et risus auctor, viverra lacus vel, vulputate massa. Pellentesque faucibus, lacus ac tempus pretium, tortor nulla sollicitudin ante, ac rhoncus orci velit vel magna. Quisque vitae molestie augue, accumsan consectetur augue.',
            text3: 'Nunc placerat ullamcorper ipsum, et tristique nibh facilisis nec. Suspendisse varius porttitor magna, non rhoncus ex placerat at. Aenean ut purus vitae sapien tempor tincidunt a sit amet purus. Morbi consequat dapibus pharetra. Quisque tempus orci urna, nec feugiat risus tempus nec. Phasellus tempus cursus ipsum id elementum. In hac habitasse platea dictumst. Donec vitae tincidunt nisl. In at quam risus. Nunc semper nisl porta, fringilla mauris ac, viverra arcu. Proin rutrum orci vitae lectus interdum tristique.',
            text4: 'Sed interdum finibus euismod. Nullam porta a dui sed tincidunt. Fusce elit lectus, tristique sed lacinia in, maximus sed eros. Suspendisse nec vulputate velit, id gravida lacus. Sed id erat a eros molestie semper ac nec metus. Aliquam erat volutpat. In convallis tortor quam, et pellentesque enim euismod eget.',
            sign: 'Redis León'

            }),
        mounted() {
            
        }
    }
</script>
