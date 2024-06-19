(function () {
    "use strict";

    var canvas,
        ctx,
        mousePos,
        points = [],
        maxDist = 190,
        colour = "239,68,68",
        centerAreaSize = 380,
        canvas_cursor;

    const PARTICLE_COUNT = 150;

    function init() {
        canvas_cursor = document.getElementById("canvas_cursor");
        canvas = document.getElementById("canvas");
        ctx = canvas.getContext("2d");
        canvas_cursor.addEventListener("mousemove", function (evt) {
            mousePos = getMousePos(canvas_cursor, evt);
        });
        resizeCanvas();
        generatePoints(PARTICLE_COUNT);
        pointFun();
        setInterval(pointFun, 16);
        window.addEventListener("resize", resizeCanvas, false);
    }

    function Point() {
        this.x = Math.random() * (canvas.width + maxDist) - maxDist / 2;
        this.y = Math.random() * (canvas.height + maxDist) - maxDist / 2;

        var centerX = canvas.width / 2;
        var centerY = canvas.height / 2;
        while (
            this.x > centerX - centerAreaSize / 2 &&
            this.x < centerX + centerAreaSize / 2 &&
            this.y > centerY - centerAreaSize / 2 &&
            this.y < centerY + centerAreaSize / 2
        ) {
            this.x = Math.random() * (canvas.width + maxDist) - maxDist / 2;
            this.y = Math.random() * (canvas.height + maxDist) - maxDist / 2;
        }

        this.vx = Math.random() * 1 - 0.5;
        this.vy = Math.random() * 1 - 0.5;
        this.dia = Math.random() * 3 + 1;
        points.push(this);
    }

    function generatePoints(amount) {
        for (var i = 0; i < amount; i++) {
            new Point();
        }
        console.log(points);
    }

    function draw(obj) {
        ctx.beginPath();
        ctx.fillStyle = "rgb(" + colour + ")";
        ctx.arc(obj.x, obj.y, obj.dia, 0, 2 * Math.PI);
        ctx.closePath();
        ctx.fill();
    }

    function update(obj) {
        obj.x += obj.vx;
        obj.y += obj.vy;

        var centerX = canvas.width / 2;
        var centerY = canvas.height / 2;
        var halfSize = centerAreaSize / 2;

        if (obj.x > centerX - halfSize && obj.x < centerX + halfSize) {
            if (obj.y > centerY - halfSize && obj.y < centerY + halfSize) {
                if (Math.abs(centerX - obj.x) < Math.abs(centerY - obj.y)) {
                    obj.vy *= -1;
                } else {
                    obj.vx *= -1;
                }
            }
        }

        if (obj.x > canvas.width + maxDist / 2) {
            obj.x = -(maxDist / 2);
        } else if (obj.x < -(maxDist / 2)) {
            obj.x = canvas.width + maxDist / 2;
        }
        if (obj.y > canvas.height + maxDist / 2) {
            obj.y = -(maxDist / 2);
        } else if (obj.y < -(maxDist / 2)) {
            obj.y = canvas.height + maxDist / 2;
        }
    }

    function pointFun() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        if (mousePos) {
            collision(mousePos, maxDist * 2.5);
            draw(mousePos);
        }
        for (var i = 0; i < points.length; i++) {
            collision(points[i], maxDist);
            draw(points[i]);
            update(points[i]);
        }
    }

    function collision(obj, dist) {
        var temp;
        for (var i = 0; i < points.length; i++) {
            if (obj !== points[i]) {
                temp = Math.sqrt(
                    Math.pow(obj.x - points[i].x, 2) +
                        Math.pow(obj.y - points[i].y, 2)
                );
                if (temp < dist) {
                    ctx.beginPath();
                    ctx.moveTo(obj.x, obj.y);
                    ctx.strokeStyle =
                        "rgba(" +
                        colour +
                        "," +
                        0.8 * Math.pow((dist - temp) / dist, 5) +
                        ")";
                    ctx.lineTo(points[i].x, points[i].y);
                    ctx.closePath();
                    ctx.stroke();
                }
            }
        }
    }

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    function getMousePos(cvs, evt) {
        var rect = cvs.getBoundingClientRect();
        return {
            x: evt.clientX - rect.left,
            y: evt.clientY - rect.top,
        };
    }

    document.addEventListener("DOMContentLoaded", init, false);
})();


