function displayHeight(height){
    var element = document.getElementById("barmeter");
    element.style.height = height+'px';
    element.style.marginTop = 448-height+'px';
}

function changeTopAndHeight(realheight) {
    if(realheight < 40) {
        realheight = 40;
    }
    console.log(new_height);
    var new_height = 2.675*(realheight-40)+20;
    displayHeight(new_height);
}

function animate_bmi(bmi) {
    var element = document.getElementById("bmi_bar");
    if(bmi<15){
        element.style.left = '-10px'
        return
    }
    if (bmi>40){
        element.style.left =  '97.5%';
        return;
    }
    left_bmi_bar = 19*bmi/5-57;
    element.style.left =  left_bmi_bar + "%";
}

function cek_bmi(bmi) {
    if (bmi < 16) {
        return "Severe Thinness: You are severely underweight.";
    } else if (bmi >= 16 && bmi < 17) {
        return "Moderate Thinness: You are moderately underweight.";
    } else if (bmi >= 17 && bmi < 18.5) {
        return "Mild Thinness: You are mildly underweight.";
    } else if (bmi >= 18.5 && bmi < 25) {
        return "Normal: You’re Healthy.";
    } else if (bmi >= 25 && bmi < 30) {
        return "Overweight: You are overweight.";
    } else if (bmi >= 30 && bmi < 35) {
        return "Obese Class I: You are in Obesity Class I.";
    } else if (bmi >= 35 && bmi < 40) {
        return "Obese Class II: You are in Obesity Class II.";
    } else if (bmi >= 40) {
        return "Obese Class III: You are in Obesity Class III.";
    } else {
        return "NaN";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var bmiButton = document.getElementById('bmi_button');
    bmiButton.onclick = function() {
        var weightInput = document.getElementById('weight');
        var ageInput = document.getElementById('age');
        var heightInput = document.getElementById('height');
        var weightValue = weightInput.value;
        var ageValue = ageInput.value;
        var heightValue = heightInput.value / 100; 
        var bmi = weightValue / (heightValue * heightValue); 

        var bmiResultElement = document.getElementById('bmi_result').getElementsByTagName('span')[0];
        var bmiResultElement2 = document.getElementById('badan-text10').getElementsByTagName('span')[0];

        var health_bmi = document.getElementById('result_bmi').getElementsByTagName('span')[0];
        console.log(heightValue, weightValue, ageValue)
        if(weightValue == 0 || heightValue == '' || ageValue == ''|| heightValue == 0 || ageValue == 0) {
            Swal.fire({
                title: "Warning",
                text: "All fields must be filled and cannot be zero",
                icon: "error"
            });
            return
        }

        bmiResultElement.innerText = bmi.toFixed(1);
        bmiResultElement2.innerText = bmi.toFixed(1);

        if (ageValue < 20) {
            Swal.fire({
                title: "Alert",
                text: "For person uder 20 years old, readings might not be accurate",
                icon: "warning"
              });
        }


        animate_bmi(bmi);
        var result = cek_bmi(bmi);
        health_bmi.innerText = result;

        heightValue  = heightValue * 100;
        changeTopAndHeight(heightValue); 
    };
});
