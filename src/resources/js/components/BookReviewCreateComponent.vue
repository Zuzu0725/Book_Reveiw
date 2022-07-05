<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="submit">
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-3 col-form-label">書籍名</label>
                        <input type="text" class="col-sm-9 form-control" id="book_name" v-model="review.book_name">
                    </div>
                    <div class="form-group row">
                        <label for="author" class="col-sm-3 col-form-label">著者名</label>
                        <input type="text" class="col-sm-9 form-control" id="author" v-model="review.author">
                    </div>
                    <div class="form-group row">
                        <label for="summary" class="col-sm-3 col-form-label">感想</label>
                        <textarea class="col-sm-9 form-control" id="summary" v-model="review.summary"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">登録する</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

    export default {
        data() {
            return {
                review: {}
            }
        },
        methods: {
            submit() {
                axios.post('/api/book_reviews', this.review)
                    .then((res) => {
                        this.$router.push({name: 'book_review.list'});
                    });
            }
        }
    }
</script>
