/**
 * 
 */
const address= "10175 SW Barbur Boulevard, Suite 100BA, Portland, OR, 97219";
const PO= "5996; Aloha, OR 97006-5996";
const email="info@i-sos.org";
const phone="(503) 259-2320";

function writeFooter()
{
	document.write(
			"<div class=\"footer\" >"
			+"<div>"
			+"<ul class=\"FooterList\">"
			+"<li class=\"FooterListItem\">Address:"+ address+" </li>"
			+"<li class=\"FooterListItem\">Phone number: (503) 259-2320</li>"
			+"<li class=\"FooterListItem\">P.O. Box "+PO+" </li>"
			+"<li class=\"FooterListItem\">email: "+email+"</li>"
			+"</ul> </br>"
			+"</div>"
			+"<div >"
			+"<p align=\"center\">ISOS is a 501c3 nonprofit organization with Tax ID#: 38-3655438 &#124 Copyright"+"&copy;"+" i-sos.org </p>"
			+"</div>"
			+"</div>");
}