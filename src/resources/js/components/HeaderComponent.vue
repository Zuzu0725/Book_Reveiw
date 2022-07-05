<template>
    <div class="container-fluid bg-primary mb-3">
        <div class="container">
            <nav class="navbar navbar-dark ">
                <span class="navbar-brand mb-0 h1">Book Review</span>
                <div>
                    <router-link v-bind:to="{name: 'book_review.list'}">
                        <button class="btn btn-success">一覧</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'book_review.create'}">
                        <button class="btn btn-success">登録</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
