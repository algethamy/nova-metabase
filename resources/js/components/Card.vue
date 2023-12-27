<template>
    <Card class="flex flex-col items-center justify-center">
        <iframe
            :src="iframeUrl"
            frameborder="0"
            width="100%"
            :height="height"
            allowtransparency>

        </iframe>
    </Card>
</template>

<script>
export default {
    props: [
        'card',
    ],

    data: () => ({
        iframeUrl: '',
        height: '',
    }),
    mounted() {
        this.iframeUrl = this.card.iframeUrl;
        this.height = this.card.iframeHeight || 300;
    },
}
</script>
