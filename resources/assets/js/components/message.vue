<template>

    <li class="list-group-item" :class="className"><slot></slot></li>

</template>

<script>
    export default {
    props:
    [
    'color'
    ],
    computes:
    {
    className()
    {
    return 'list-group-item-'+this.color;
    }
    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
