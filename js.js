var id, password, infoname, balance, typemoney, rank, joindate, country  = new Array();
var account = new Array();
id= [1, 2, 3, 4];
password= [11,22,33,44];
infoname = ["vinh","huyen","sang","yen"];
balance = [0,0,0,0];
typemoney =["USD","USD","USD","USD"];
rank = ["Gold","Silver","Copper","New"];
joindate = ["22/03/2019","10/02/2018","22/03/2019","10/02/2018"];
country = ["Viet Nam", "United State", "Singapore","canada"]
for (i = 0; i < id.length; i++){
	account[i] = parseInt(balance[i]);
}
var i = 0;
var success = -1;

function Login(){
	for (i = 0; i< id.length; i++){
		if ((document.getElementById("idname").value == id[i]) && (document.getElementById("pass").value == password[i])) {
            document.getElementById("loginaccount").style.display = 'none';
            document.getElementById("manageaccount").style.display = 'block';
            document.getElementById("content").style.display = 'block';
            document.getElementById("content2").style.display = 'block';
            document.getElementById("content3").style.display = 'block';
                alert("Success Login, Welcome " + infoname[i]);
        		success=i;
        		prjoindate=joindate[i];
        		prname=infoname[i];
				prbalance=account[i];
				prtypemoney= typemoney[i];
				prcountry = country[i];

	document.getElementById("joindate").innerHTML ="Member "+prjoindate;
	document.getElementById("infoname").innerHTML = prname;
	document.getElementById("infoname2").innerHTML = prname;
	document.getElementById("balance").innerHTML = prbalance;
	document.getElementById("typemoney").innerHTML = prtypemoney;
	document.getElementById("country").innerHTML =prcountry;
        }
	}
	if (success == -1) {
        alert("The account or password is incorrect, please login again");
    }
}


function Deposit() {
	document.getElementById("errortick").style.display = 'none';
	document.getElementById("changepass").style.display = 'none';
	document.getElementById("changeimg").style.display = 'none';
	document.getElementById("no").style.display = 'block';
	document.getElementById("notick").style.display = 'block';
    var input = document.getElementById("Depositinput").value;
    if (input<0) {
    	document.getElementById("errortick").style.display = 'block';
    	document.getElementById("notick").style.display = 'none';
    }else{
    input = parseInt(input);
    account[success] += input;
    prbalance=account[success];
    document.getElementById("balance").innerHTML =prbalance;  
    document.getElementById("notification") .innerHTML= "Success. You deposii "+input+" USD on balance";
    }
}

function Withdrawal() {
	document.getElementById("changepass").style.display = 'none';
	document.getElementById("changeimg").style.display = 'none';
	document.getElementById("no").style.display = 'block';
	document.getElementById("notick").style.display = 'block';
	var input = document.getElementById("Withdrawalinput").value;
	if (input<0) {
		document.getElementById("errortick").style.display = 'block';
    	document.getElementById("notick").style.display = 'none';	
    } else if (input != parseInt(input)) {
    	 document.getElementById("notick").style.display = 'none';
    	 document.getElementById("errortick").style.display = 'block';
        document.getElementById("notification").innerHTML = "Error. You entered the wrong format. Please enter a number ";
    } else if (account[success] - parseInt(input) >= 1) {
    	document.getElementById("errortick").style.display = 'none';
        account[success] -= parseInt(input);
        document.getElementById("notification").innerHTML = "Success withdrawal " + input + " USD";
        prbalance=account[success];
        document.getElementById("balance").innerHTML =prbalance;
    } else if (account[success] - parseInt(input) < 0) {
    	document.getElementById("notick").style.display = 'none';
    	document.getElementById("errortick").style.display = 'block';
        document.getElementById("notification").innerHTML = "Error. The balance is not sufficient to request withdrawal";
    } else {
    	document.getElementById("notick").style.display = 'none';
    	document.getElementById("errortick").style.display = 'block';
        document.getElementById("notification").innerHTML = "Error. Your balance is " + account[success] + " USD. You need more 1 USD to request";
    }
}

function Logout() {
    document.getElementById("loginaccount").style.display = 'block';
    document.getElementById("formlogin").reset();
    document.getElementById("manageaccount").style.display = 'none';
            document.getElementById("content").style.display = 'none';
            document.getElementById("content2").style.display = 'none';
            document.getElementById("content3").style.display = 'none';
}
function Transfers(){
	document.getElementById("changepass").style.display = 'none';
	document.getElementById("changeimg").style.display = 'none';
	document.getElementById("no").style.display = 'block';
	document.getElementById("notick").style.display = 'block';
	var inputmoney = document.getElementById("moneynumber").value;
	inputmoney = parseInt(inputmoney);
	var input = document.getElementById("accountnumber").value;
	var k=0;
	for (i = 0; i < id.length; i++){		
	if ((input == id[i] && inputmoney>0 && account[success]-inputmoney>0)){
		k=1;
		account[success] -= inputmoney;
		prbalance=account[success];
		account[i] += inputmoney;
		document.getElementById("errortick").style.display = 'none';
		document.getElementById("balance").innerHTML = prbalance;
		document.getElementById("notification") .innerHTML= "Success. You have send the money "+inputmoney+" USD in account "+id[i];
	}else{
		document.getElementById("errortick").style.display = 'block';
    	document.getElementById("notick").style.display = 'none';
	}


	}
}

function Change() {
	document.getElementById("changepass").style.display = 'block';
	document.getElementById("changeimg").style.display = 'block';
	document.getElementById("no").style.display = 'none';
	document.getElementById("notick").style.display = 'none';
    document.getElementById("errortick").style.display = 'none';
}
function Changepassword(){
	if (document.getElementById("passcurrent").value == password[success] && document.getElementById("passnew").value == document.getElementById("passnewrepeat").value) {
        password[success] = document.getElementById("passnew").value;
        document.getElementById("changepass").style.display = 'none';
	document.getElementById("changeimg").style.display = 'none';
	document.getElementById("no").style.display = 'block';
	document.getElementById("notick").style.display = 'block';
	document.getElementById("notification") .innerHTML= "Success. You password has been change";
    } else {
    	document.getElementById("changepass").style.display = 'none';
	document.getElementById("changeimg").style.display = 'none';
	document.getElementById("no").style.display = 'block';
	document.getElementById("notick").style.display = 'none';
	document.getElementById("errortick").style.display = 'block';
        document.getElementById("notification") .innerHTML= "Error. Password wrong ";
    }
}








