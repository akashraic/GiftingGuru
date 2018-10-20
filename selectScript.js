$(document).ready(function () {
    $(".attr1, .attr2, .attr3").change(function () {
        var val = $(".attr1").val();
        var val2 = $(".attr2").val();
        var val3 = $(".attr3").val();
        switch (val) {
            case "Creative":
                $(".sattr1").html("<option value='Visual_Artist'>Visual Artist</option>\n\
                                      <option value='Musician'>Musician</option>\n\
                                      <option value='Illustrator'>Illustrator</option>\n\
                                      <option value='DIYer'>DIY</option>\n\
                                      <option value='Fashion_Enthusiast'>Fashion Enthusiast</option>");
                break;
            case "Adventurous" :
                $(".sattr1").html("<option value='Nature_lover'>Nature Lover</option>\n\
                                      <option value='Foodie'>Foodie</option>\n\
                                      <option  value='Traveller'>Traveller</option>");
                break;
            case "Intellectual" :
                $(".sattr1").html("<option value='Academia'>Academic</option>\n\
			<option value='Worldly'>Worldly</option>");
                break;
            case "Generous":
                $(".sattr1").html("<option value='Big_hearted'>Big Hearted</option>\n\
			<option value='Philanthropist'>Philanthropist</option>");
                break;
            case "Outgoing":
                $(".sattr1").html("<option value='Care_free'>Care free</option>\n\
			<option value='Sociable'>Sociable</option>");
                break;
            case "Family_Oriented":
                $(".sattr1").html("<option value='-'>Family_Oriented</option>");
                break;
            case "Philosophical":
                $(".sattr1").html("<option value='-'>Philosophical</option>");
                break;
            default:
                $(".sattr1").html("<option value=''>--select one--</option>");
        }

        switch (val2) {
            case "Creative":
                $(".sattr2").html("<option value='Visual_Artist'>Visual Artist</option>\n\
                                      <option value='Musician'>Musician</option>\n\
                                      <option value='Illustrator'>Illustrator</option>\n\
                                      <option value='DIYer'>DIY</option>\n\
                                      <option value='Fashion_Enthusiast'>Fashion Enthusiast</option>");
                break;
            case "Adventurous" :
                $(".sattr2").html("<option value='Nature_lover'>Nature Lover</option>\n\
                                      <option value='Foodie'>Foodie</option>\n\
                                      <option  value='Traveller'>Traveller</option>");
                break;
            case "Intellectual" :
                $(".sattr2").html("<option value='Academia'>Academic</option>\n\
			<option value='Worldly'>Worldly</option>");
                break;
            case "Generous":
                $(".sattr2").html("<option value='Big_hearted'>Big Hearted</option>\n\
			<option value='Philanthropist'>Philanthropist</option>");
                break;
            case "Outgoing":
                $(".sattr2").html("<option value='Care_free'>Care free</option>\n\
			<option value='Sociable'>Sociable</option>");
                break;
            case "Family_Oriented":
                $(".sattr2").html("<option value='-'>Family_Oriented</option>");
                break;
            case "Philosophical":
                $(".sattr2").html("<option value='-'>Philosophical</option>");
                break;
            default:
                $(".sattr2").html("<option value=''>--select one--</option>");
        }
        switch (val3) {
            case "Creative":
                $(".sattr3").html("<option value='Visual_Artist'>Visual Artist</option>\n\
                                    <option value='Musician'>Musician</option>\n\
                                    <option value='Illustrator'>Illustrator</option>\n\
                                    <option value='DIYER'>DIY</option>\n\
                                    <option value='Fashion_Enthusiast'>Fashion Enthusiast</option>");
                break;
            case "Adventurous" :
                $(".sattr3").html("<option value='Nature_lover'>Nature Lover</option>\n\
                                    <option value='Foodie'>Foodie</option>\n\
                                    <option  value='Traveller'>Traveller</option>");
                break;
            case "Intellectual" :
                $(".sattr3").html("<option value='Academia'>Academic</option>\n\
			<option value='Worldly'>Worldly</option>");
                break;
            case "Generous":
                $(".sattr3").html("<option value='Big_hearted'>Big Hearted</option>\n\
			<option value='Philanthropist'>Philanthropist</option>");
                break;
            case "Outgoing":
                $(".sattr3").html("<option value='Care_free'>Care free</option>\n\
			<option value='Sociable'>Sociable</option>");
                break;
            case "Family_Oriented":
                $(".sattr3").html("<option value='-'>Family_Oriented</option>");
                break;
            case "Philosophical":
                $(".sattr3").html("<option value='-'>Philosophical</option>");
                break;
            default:
                $(".sattr3").html("<option value=''>--select one--</option>");
        }

    });
});


