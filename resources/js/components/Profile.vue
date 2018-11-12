<template>
    <Form ref="form" :model="form" inline :label-width="80">
        <PartialName :form="form"></PartialName>
        <FormItem prop="email" :show-message="form.errors.has('email')" :error="form.errors.get('email')">
            <Input type="email" v-model="form.email" placeholder="Password">
                <Icon type="ios-lock-outline" slot="prepend"></Icon>
            </Input>
        </FormItem>
        <FormItem>
            <Button type="primary" @click.prevent="update()" :disabled="form.busy">Signin</Button>
        </FormItem>
    </Form>
</template>

<script>
import PartialName from './forms/PartialName'
    export default {
      components: {
        'PartialName': PartialName
      },
      data () {
        return {
          form: new Form({
            name: '',
            email: ''
          }),
          test: {
            name: 'Dera',
            email: 'yes@mail.com'
          }
        }
      },
      methods: {
        update() {
          console.log(this.form)
          this.form.put('api/profile/')
        }
      },
      mounted() {
        this.form.fill(this.test)
          console.log('Component mounted.')
      }
    }
</script>
