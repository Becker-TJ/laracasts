<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <title>Episode 4:  Custom Vue Component</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

</html>
<body class="h-full grid place-items-center">
<div id="app">
    <app-button>Submit</app-button>
</div>

<script type="module">
    import AppButton from "./js/components/AppButton.js"
    let app = {
        components: {
            'app-button': AppButton,
        }
    };

    Vue.createApp(app).mount('#app');

</script>

</body>
</html>
