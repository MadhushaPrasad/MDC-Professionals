<!--    finding job rate start-->
<div class="rateDiv">
    <h1>FINDING JOBS RATE</h1>
    <span></span>
    <div class="rateCircleList">
        <div>
            <div
                    class="pie"
                    data-pie='{ "lineargradient": ["yellow","#ff0000"], "round": true, "percent": 70, "colorSlice": "#4CAF50",
         "colorCircle": "#e6e6e6" }'
            ></div>
            <p>Web Development</p>
        </div>
        <div>
            <div
                    class="pie"
                    data-pie='{ "lineargradient": ["yellow","#ff0000"], "round": true, "percent": 70, "colorSlice": "#4CAF50",
         "colorCircle": "#e6e6e6" }'
            ></div>
            <p>Web Development</p>
        </div>
        <div>
            <div
                    class="pie"
                    data-pie='{ "lineargradient": ["yellow","#ff0000"], "round": true, "percent": 70, "colorSlice": "#4CAF50",
         "colorCircle": "#e6e6e6" }'
            ></div>
            <p>Web Development</p>
        </div>

        <div>
            <div
                    class="pie"
                    data-pie='{ "lineargradient": ["yellow","#ff0000"], "round": true, "percent": 70, "colorSlice": "#4CAF50",
         "colorCircle": "#e6e6e6" }'
            ></div>
            <p>Web Development</p>
        </div>
    </div>
</div>
<!--    finding job rate end-->

<script type="text/javascript">
    if (!('IntersectionObserver' in window)) {
        var script = document.createElement('script');
        // script.src =
        //   'https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver';
        // document.getElementsByTagName('head')[0].appendChild(script);
    }
</script>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const circle = new CircularProgressBar('pie');

        setInterval(() => {
            const options = {
                index: 1,
                percent: Math.floor(70),
            };
            circle.animationTo(options);
        });

        setInterval(() => {
            const options = {
                index: 2,
                percent: Math.floor(65),
            };
            circle.animationTo(options);
        });

        setInterval(() => {
            const options = {
                index: 3,
                percent: Math.floor(5),
            };
            circle.animationTo(options);
        });

        setInterval(() => {
            const options = {
                index: 4,
                percent: Math.floor(Math.random() * 100 + 1),
            };
            circle.animationTo(options);
        }, 2000);
    });
</script>