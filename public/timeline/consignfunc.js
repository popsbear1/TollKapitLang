
	function consignfunc() {

		s=document.f2.date_to11.value
		days=(document.f2.consign.value*1)//-1



		document.forms[0].apprcont.value="";
		document.forms[0].noticeproc.value="";
		document.forms[0].group15.checked="checked";


		if (days=='') {
			alert("there should be number input in the textbox")
			return false;
		}
		dateArray = s.split('/')
		sdate = new Date(dateArray[2],dateArray[0]-1,dateArray[1])

		if(dateArray[2].length<4){
			alert("Please Enter The Year As A Four Digit Number\n\nExample:- 2002\n\nThank You")
			return document.f2.date_to.value=""
		//}
		}
		else{


			odate13 = new Date(sdate.getTime() + (days * 86400000))
			odate13.setDate(odate13.getDate() + 0)
			document.f2.date_to13.value=("0" + (odate13.getMonth() + 1)).slice(-2) + '/' + ("0" + odate13.getDate()).slice(-2) + '/' + odate13.getFullYear()

			odate14 = new Date(sdate.getTime() + (days * 86400000))
			odate14.setDate(odate14.getDate() +1)
			document.f2.date_to14.value=("0" + (odate14.getMonth() + 1)).slice(-2) + '/' +  ("0" + odate14.getDate()).slice(-2) + '/' + odate14.getFullYear()

			odate15 = new Date(sdate.getTime() + (days * 86400000))
			odate15.setDate(odate15.getDate() + 1)
			document.f2.date_to15.value=("0" + (odate15.getMonth() + 1)).slice(-2) + '/' + ("0" + odate15.getDate()).slice(-2) + '/' + odate15.getFullYear()

			odate16 = new Date(sdate.getTime() + (days * 86400000))
			odate16.setDate(odate16.getDate() + 2 )
			document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' + odate16.getFullYear()

			odate17 = new Date(sdate.getTime() + (days * 86400000))
			odate17.setDate(odate17.getDate() + 2)
			document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' + ("0" + odate17.getDate()).slice(-2) + '/' + odate17.getFullYear()
		}
	}
