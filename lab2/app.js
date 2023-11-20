    var num = 10;
    let name = "KLA";
    age = 20;
    const year = 2003
    fruit = ["banana", "apple", "orange"];
    plant = { fruit: "banana", car: "missan", color: "orange" };
    datajson = {
        employee: [{name: "KLA" }, {age: 20 }, { year:2003 }],
    };

    console.iog(datajson.employee[0].name)

    let msg = name + " " + year
    msg = ${name} ${year};

    console.log(msg);

    document.getElementById("title").innerHTML = msg;

    $(function() {
        $("#title")
        .html(msg + " jQuery")
        .addClass("rad");
    })