/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

            $(document).ready(function () {
                $(".attr1, .attr2, .attr3").change(function () {
                    var val = $(this).val();
                    if (val === "Creative") {
                    $(".sattr1").html("<option value='Visual_Artist'>Visual Artist</option>\n\
                                      <option value='Musician'>Musician</option>\n\
                                      <option value='Illustrator'>Illustrator</option>\n\
                                      <option value='DIY'>DIY</option>\n\
                                      <option value='Fashion_Enthusiast'>Fashion Enthusiast</option>");
                    } else if (val === "Adventurous") {
                    $(".sattr1").html("<option value='Nature_Lover'>Nature Lover</option>\n\
			<option value='Foodie'>Foodie</option>\n\
			<option  value='Traveller'>Traveller</option>");
                    } else if (val === "Intellectual") {
                    $(".sattr1").html("<option value='Academic'>Academic</option>\n\
			<option value='Worldly'>Worldly</option>");
                    } else if (val === "Generous") {
                    $(".sattr1").html("<option value='Big_hearted'>Big Hearted</option>\n\
			<option value='Philanthropist'>Philanthropist</option>");
                    } else if (val === "Outgoing") {
                    $(".sattr1").html("<option value='Care_free'>Care free</option>\n\
			<option value='Sociable'>Sociable</option>");
                    } else if (val === "Family_Oriented") {
                    $(".sattr1").html("<option value='Family_Oriented'>Family Oriented</option>");
                    } else if (val === "Philosophical") {
                    $(".sattr1").html("<option value='Philosophical'>Philosophical</option>");
                    } else if (val === "Select") {
                    $(".sattr1").html("<option value=''>--select one--</option>");
        }
                    else if (val === "Creative2") {
                    $(".sattr2").html("<option value='Visual_Artist'>Visual Artist</option>\n\
                                      <option value='Musician'>Musician</option>\n\
                                      <option value='Illustrator'>Illustrator</option>\n\
                                      <option value='DIY'>DIY</option>\n\
                                      <option value='Fashion_Enthusiast'>Fashion Enthusiast</option>");
                    } else if (val === "Adventurous2") {
                    $(".sattr2").html("<option value='Nature_Lover'>Nature Lover</option>\n\
			<option value='Foodie'>Foodie</option>\n\
			<option  value='Traveller'>Traveller</option>");
                    } else if (val === "Intellectual2") {
                    $(".sattr2").html("<option value='Academic'>Academic</option>\n\
			<option value='Worldly'>Worldly</option>");
                    } else if (val === "Generous2") {
                    $(".sattr2").html("<option value='Big_hearted'>Big Hearted</option>\n\
			<option value='Philanthropist'>Philanthropist</option>");
                    } else if (val === "Outgoing2") {
                    $(".sattr2").html("<option value='Care_free'>Care free</option>\n\
			<option value='Sociable'>Sociable</option>");
                    } else if (val === "Family_Oriented2") {
                    $(".sattr2").html("<option value='Family_Oriented'>Family Oriented</option>");
                    } else if (val === "Philosophical2") {
                    $(".sattr2").html("<option value='Philosophical'>Philosophical</option>");
                    } else if (val === "Select2") {
                    $(".sattr2").html("<option value=''>--select one--</option>");
        }
                    else if (val === "Creative3") {
                    $(".sattr3").html("<option value='Visual_Artist'>Visual Artist</option>\n\
                                      <option value='Musician'>Musician</option>\n\
                                      <option value='Illustrator'>Illustrator</option>\n\
                                      <option value='DIY'>DIY</option>\n\
                                      <option value='Fashion_Enthusiast'>Fashion Enthusiast</option>");
                    } else if (val === "Adventurous3") {
                    $(".sattr3").html("<option value='Nature_Lover'>Nature Lover</option>\n\
			<option value='Foodie'>Foodie</option>\n\
			<option  value='Traveller'>Traveller</option>");
                    } else if (val === "Intellectual3") {
                    $(".sattr3").html("<option value='Academic'>Academic</option>\n\
			<option value='Worldly'>Worldly</option>");
                    } else if (val === "Generous3") {
                    $(".sattr3").html("<option value='Big_hearted'>Big Hearted</option>\n\
			<option value='Philanthropist'>Philanthropist</option>");
                    } else if (val === "Outgoing3") {
                    $(".sattr3").html("<option value='Care_free'>Care free</option>\n\
			<option value='Sociable'>Sociable</option>");
                    } else if (val === "Family_Oriented3") {
                    $(".sattr3").html("<option value='Family_Oriented'>Family Oriented</option>");
                    } else if (val === "Philosophical3") {
                    $(".sattr3").html("<option value='Philosophical'>Philosophical</option>");
                    } else if (val === "Select3") {
                    $(".sattr3").html("<option value=''>--select one--</option>");
                    }
    });
});


