<template>
    <Card class="flex flex-col items-center justify-center">
      <span v-text="iframeHeight"></span>
        <iframe
            :src="iframeUrl"
            frameborder="0"
            width="100%"
            :height="iframeHeight"
            allowtransparency
        ></iframe>
    </Card>
</template>

<script>
export default {
    props: [
        'card',
    ],

    data: () => ({
        iframeUrl: '',
        iframeHeight: ''
    }),
    mounted() {
        this.iframeUrl = this.card.iframeUrl;
        this.iframeHeight = this.card.iframeHeight;
    },
}
</script>
