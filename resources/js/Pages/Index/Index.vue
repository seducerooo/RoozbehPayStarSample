<template>
    <div>index Page</div>
        <br>
        {{ message}}
</template>

<script setup>
defineProps({'message': String})
</script>
