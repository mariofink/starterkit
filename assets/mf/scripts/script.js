$(document).ready(function () {
    $("article.post").fitVids();
    if (hljs.initHighlightingOnLoad && typeof hljs.initHighlightingOnLoad == "function") {
        hljs.initHighlightingOnLoad();
    }
});