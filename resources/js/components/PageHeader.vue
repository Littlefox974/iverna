<template>
    <div>
        <toolbar-menu></toolbar-menu>   
    </div>
</template>

<script>
import ToolbarMenu from './ToolbarMenu.vue'
export default {

  components: {
    ToolbarMenu
  },
    mounted() {
        const link = document.getElementById('headerLink')
        const destination = document.getElementById('section1')

        link.addEventListener('click', function () {
            destination.scrollIntoView({behavior: "smooth"})
        })
    }
    
}
</script>




