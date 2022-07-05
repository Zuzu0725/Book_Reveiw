<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="submit">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="review.id">
                    </div>
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-3 col-form-label">書籍名</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" id="book_name" v-model="review.book_name">
                    </div>
                    <div class="form-group row">
                        <label for="author" class="col-sm-3 col-form-label">著者名</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" id="author" v-model="review.author">
                    </div>
                    <div class="form-group row">
                        <label for="summary" class="col-sm-3 col-form-label">感想</label>
                        <textarea type="text" class="col-sm-9 form-control-plaintext" id="summary" v-model="review.summary"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">更新する</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            reviewId: Number
        },
        data() {
            return {
                review: {}
            }
        },
        methods: {
            getReview() {
                axios.get('/api/book_reviews/' + this.reviewId)
                    .then((res) => {
                        this.review = res.data;
                    });
            },
            submit() {
                axios.put('/api/book_reviews/' + this.reviewId, this.review)
                    .then((res) => {
                        this.$router.push({name: 'book_review.list'});
                    });
            }
        },
        mounted() {
            this.getReview()
        }
    }
</script>
