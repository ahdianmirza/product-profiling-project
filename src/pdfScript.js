$(document).ready(function() {
    const specialElementHandlers = {
        "#editor": function(element, renderer) {
            return true;
        }
    };

    $("#cmd").click(function() {
        const doc = new jsPDF();

        doc.fromHTML($("#print-content").html(),15,15,{
            "width": 652,
            "elementHandlers": specialElementHandlers
        });
    });

    doc.save("html2pdf.pdf");
})