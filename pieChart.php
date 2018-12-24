#引入pieChart.js

#html 代码
<div id="my_container" style="width:600px; height:500px;">
    <canvas id="pie_canvas"></canvas>
</div>


#js 代码
var canvas = document.getElementById("pie_canvas");
var seriesData = [
    {name:"apples", value:0.1, color:"#FF00aa",label1:"描述1",label2:"200元"},
    {name:"orange", value:0.2, color:"#FF0011",label1:"描述2",label2:"200元"},
    {name:"banana", value:0.3, color:"#FFaaFF",label1:"描述3",label2:"200元"},
    {name:"peaches", value:0.2, color:"#FF33FF",label1:"描述4",label2:"200元"},
    {name:"strawberries", value:0.2, color:"#FF99FF",label1:"描述5",label2:"200元"}
    ];
var config = {
    width : 400,
    height: 400,
    series: seriesData,
    canvas: canvas,
    title:"Fruit Sales",
    callback:function(obj){
        console.log(obj.label1);
    }
};
pieChart.initSettings(config);
pieChart.render();
            
            
#注意一定要找到canvas元素才能执行接下去的js代码
            
