<template>
    <Card class="flex flex-col items-center justify-center">
        <iframe
            :src="this.card.iframeUrl"
            frameborder="0"
            width="100%"
            :height="this.card.iframeHeight"
            allowtransparency
        ></iframe>
    </Card>
</template>

<script>
export default {
    props: [
        'card',
    ]
}
</script>
