<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">書籍名</th>
                    <th scope="col">著者名</th>
                    <th scope="col">感想</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(review, index) in reviews" :key="index">
                    <th scope="row">{{ review.id }}</th>
                    <td>{{ review.book_name }}</td>
                    <td>{{ review.author }}</td>
                    <td>{{ review.summary }}</td>
                    <td>
                        <router-link v-bind:to="{name: 'book_review.show', params: {reviewId: review.id}}">
                            <button class="btn btn-primary">Show</button>
                        </router-link>
                    </td>
                    <td>
                        <router-link v-bind:to="{name: 'book_review.edit', params: {reviewId: review.id}}">
                            <button class="btn btn-success">Edit</button>
                        </router-link>
                    </td>
                    <td>
                        <button class="btn btn-danger" @click="deleteReview(review.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                reviews: []
            }
        },
        methods: {
            getReviews() {
               axios.get('/api/book_reviews')
                   .then((res) => {
                       this.reviews = res.data;
                   });
           },
           deleteReview(id) {
            axios.delete('/api/book_reviews/' + id)
                .then((res) => {
                    this.getReviews();
                });
           }
        },
        mounted() {
            this.getReviews();
        }
    }
</script>