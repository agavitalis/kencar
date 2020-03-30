<template>
        <div class="card card-default">
            <div class="card-header">Users</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users">
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</template>

<script>
    export default {
        mounted() {
            this.getUsers()
        },
        data() {
            return {
                users: [],
                user: {
                    name: '',
                    email: ''
                }
            }
        },
        methods: {
            getUsers () {
                axios
                    .get('/admin/vue/users')
                    .then((response) => {
                        this.users = response.data;
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            }
        }
    }
</script>
