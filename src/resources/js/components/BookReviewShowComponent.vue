<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row border-bottom">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="review.id">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="title" class="col-sm-3 col-form-label">書籍名</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="author" v-model="review.book_name">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="content" class="col-sm-3 col-form-label">著者名</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="author" v-model="review.author">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="content" class="col-sm-3 col-form-label">感想</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="summary" v-model="review.summary">
                    </div>
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
            }
        },
        mounted() {
            this.getReview();
        }
    }
</script>
