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

<script>

    let app = {
        components: {
            'app-button': {
                template: `
                    <button class="bg-gray-200 hover:bg-gray-400 border rounded px-5 py-2 disabled:cursor-not-allowed" :disabled="processing">
                        <slot />
                    </button>
                `,
                data() {
                    return {
                        processing: true
                    };
                }

            },
        }
    };



    Vue.createApp(app).mount('#app');
</script>
</body>
</html>