document.addEventListener("DOMContentLoaded", () => {
    var clipboard = new ClipboardJS(".clipboard");

    clipboard.on("success", function (e) {
        var tip = e.trigger.querySelector(".tip");
        tip.classList.remove("hidden");
        tip.classList.add("block");
        setTimeout(() => {
            tip.classList.remove("block");
            tip.classList.add("hidden");
        }, 700);
        e.clearSelection();
    });

    clipboard.on("error", function (e) {
        console.error("Action:", e.action);
        console.error("Trigger:", e.trigger);
        alert("Failed to copy text!");
    });
});
