<template>
  <FormItem label="Nama" prop="name" :show-message="form.errors.has('name')" :error="form.errors.get('name')">
    <Input type="text" v-model="form.name" placeholder="Username"></Input>
  </FormItem>
</template>

<script>
  export default {
    props: ['form'],
    created() {
      console.log(this.form)
    }
  }
</script>