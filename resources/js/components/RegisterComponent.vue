<template>
    <div>
        <form method="post" @submit.prevent="formHandleSubmit()">
            <input type="hidden" name="_token" :value="csrf">
            
            <div v-if="success">
                
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Dear user please activate your profile!</strong>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="/login" class="btn btn-primary">
                            Home
                        </a>
                    </div>
                </div>
            </div>
            
            <div v-if="this.errors.length >= 1" class="alert alert-danger alert-dismissible fade show">
                <div v-for="error in errors">
                    <strong>{{ error }}!</strong>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            </div>
            
            <div v-if="!success">
                <div class="form-group row">
                    <label for="first_name" class="col-md-4 col-form-label text-md-right">First name</label>
                    
                    <div class="col-md-6">
                        <input id="first_name"
                               type="text"
                               :class="['form-control', errors.first_name ? 'has-error' : '']"
                               name="last_name"
                               v-model="form.first_name"
                               autofocus
                               @change="formHandleChangeValidateSubmit()">
    
                        <div v-if="errors.first_name" class="text-danger">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ errors.first_name[0] }}</strong>
                        </span>
                        </div>
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label for="last_name" class="col-md-4 col-form-label text-md-right">Last name</label>
                    
                    <div class="col-md-6">
                        <input id="last_name"
                               type="text"
                               :class="['form-control', errors.last_name ? 'has-error' : '']"
                               name="last_name"
                               v-model="form.last_name"
                               autofocus
                               @change="formHandleChangeValidateSubmit()">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                    
                    <div class="col-md-6">
                        <input id="email"
                               type="email"
                               :class="['form-control', errors.email ? 'has-error' : '']"
                               name="email"
                               v-model="form.email"
                               autofocus
                               @change="formHandleChangeValidateSubmit()">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                    
                    <div class="col-md-6">
                        <input id="password"
                               type="password"
                               :class="['form-control', errors.password ? 'has-error' : '']"
                               name="password"
                               v-model="form.password"
                               autofocus
                               @change="formHandleChangeValidateSubmit()">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                        Password</label>
                    
                    <div class="col-md-6">
                        <input id="password-confirm"
                               type="password"
                               :class="['form-control', errors.password_confirmation ? 'has-error' : '']"
                               name="password_confirmation"
                               v-model="form.password_confirmation"
                               autofocus
                               @change="formHandleChangeValidateSubmit()">
                    </div>
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                form: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                },
                errors: [],
                success: false,
                csrf: document.head.querySelector('meta[name="csrf-token"]').content
            };
        },
        methods: {
            formHandleSubmit() {
                this.success = false;
                let dataform = new FormData();
                dataform.append('first_name', this.form.first_name);
                dataform.append('last_name', this.form.last_name);
                dataform.append('email', this.form.email);
                dataform.append('password', this.form.password);
                dataform.append('password_confirmation', this.form.password_confirmation);
                
                axios.post('/register', dataform).then(response => {
                    this.errors = response.data.errors;
                    
                    if (this.errors.length === 0) {
                        this.success = true;
                    }
                }).catch((error) => {
                    // this.errors = error.response.data.errors;
                    this.success = false;
                });
            },
            formHandleChangeValidateSubmit() {
                this.success = false;
                let dataform = new FormData();
                dataform.append('first_name', this.form.first_name);
                dataform.append('last_name', this.form.last_name);
                dataform.append('email', this.form.email);
                dataform.append('password', this.form.password);
                dataform.append('password_confirmation', this.form.password_confirmation);
                
                axios.post('/register/validates', dataform).then(response => {
                    this.errors = response.data.errors;
                    if (this.errors.length === 0) {
                        this.success = true;
                    }
                }).catch((error) => {
                    // this.errors = error.response.data.errors;
                    this.success = false;
                });
            }
        }
    }
</script>
