<?php
Option Explicit ' 显示����

Class Com_GifCode_Class
'''''''''''''''''''''''''''''''''''''''''''''
' Author: Layen support@ssaw.net 84815733(QQ)
' Thanks: Laomi, Laomiao, NetRube
' 2006-01-02
'''''''''''''''''''''''''''''''''''''''''''''
Public Noisy, Count, Width, Height, Angle, Offset, Border

Private Graph(), Margin(3)

Private Sub Class_Initialize()
Randomize
Noisy = 8 ' ���ŵ���ֵĸ���
Count = 4 ' �ַ�����
Width = 80 ' ͼƬ���
Height = 20 ' ͼƬ�߶�
Angle = 2 ' �Ƕ����仯��
Offset = 20 ' ƫ�����仯��
Border = 1 ' �߿��С
End Sub

Public Function Create()

Const cCharSet = "123456789"

Dim i, x, y

Dim vValidCode : vValidCode = ""
Dim vIndex

ReDim Graph(Width-1, Height-1)

For i = 0 To Count - 1
vIndex = Int(Rnd * Len(cCharSet))
vValidCode = vValidCode + Mid(cCharSet, vIndex+1 , 1)
SetDraw vIndex, i
Next

Create = vValidCode

}

Sub SetDot(pX, pY)
If pX * (Width-pX-1) >= 0 And pY * (Height-pY-1) >= 0 Then
Graph(pX, pY) = 1
End If
End Sub

Public Sub SetDraw(pIndex, pNumber)

' �ַ����
Dim DotData(8)
DotData(0) = Array(30, 15, 50, 1, 50, 100)
DotData(1) = Array(1 ,34 ,30 ,1 ,71, 1, 100, 34, 1, 100, 93, 100, 100, 86)
DotData(2) = Array(1, 1, 100, 1, 42, 42, 100, 70, 50, 100, 1, 70)
DotData(3) = Array(100, 73, 6, 73, 75, 6, 75, 100)
DotData(4) = Array(100, 1, 1, 1, 1, 50, 50, 35, 100, 55, 100, 80, 50, 100, 1, 95)
DotData(5) = Array(100, 20, 70, 1, 20, 1, 1, 30, 1, 80, 30, 100, 70, 100, 100, 80, 100, 60, 70, 50, 30, 50, 1, 60)
DotData(6) = Array(6, 26, 6, 6, 100, 6, 53, 100)
DotData(7) = Array(100, 30, 100, 20, 70, 1, 30, 1, 1, 20, 1, 30, 100, 70, 100, 80, 70, 100, 30, 100, 1, 80, 1, 70, 100, 30)
DotData(8) = Array(1, 80, 30, 100, 80, 100, 100, 70, 100, 20, 70, 1, 30, 1, 1, 20, 1, 40, 30, 50, 70, 50, 100, 40)

Dim vExtent : vExtent = Width / Count
Margin(0) = Border + vExtent * (Rnd * Offset) / 100 + Margin(1)
Margin(1) = vExtent * (pNumber + 1) - Border - vExtent * (Rnd * Offset) / 100
Margin(2) = Border + Height * (Rnd * Offset) / 100
Margin(3) = Height - Border - Height * (Rnd * Offset) / 100

Dim vStartX, vEndX, vStartY, vEndY
Dim vWidth, vHeight, vDX, vDY, vDeltaT

Dim vAngle, vLength

vWidth = Int(Margin(1) - Margin(0))

vHeight = Int(Margin(3) - Margin(2))

' ��ʼ���
vStartX = Int((DotData(pIndex)(0)-1) * vWidth / 100)

vStartY = Int((DotData(pIndex)(1)-1) * vHeight / 100)

Dim i, j
For i = 1 To UBound(DotData(pIndex), 1)/2

If DotData(pIndex)(2*i-2) <> 0 And DotData(pIndex)(2*i) <> 0 Then

' �յ����
vEndX = (DotData(pIndex)(2*i)-1) * vWidth / 100

vEndY = (DotData(pIndex)(2*i+1)-1) * vHeight / 100

' ������
vDX = vEndX - vStartX
' ������
vDY = vEndY - vStartY

' ��б�Ƕ�
If vDX = 0 Then
vAngle = Sgn(vDY) * 3.14/2
Else
vAngle = Atn(vDY / vDX)
End If

' 暂无内容
If Sin(vAngle) = 0 Then
vLength = vDX
Else
vLength = vDY / Sin(vAngle)
End If

' ���ת���Ƕ�
vAngle = vAngle + (Rnd - 0.5) * 2 * Angle * 3.14 * 2 / 100

vDX = Int(Cos(vAngle) * vLength)

vDY = Int(Sin(vAngle) * vLength)

If Abs(vDX) > Abs(vDY) Then vDeltaT = Abs(vDX) Else vDeltaT = Abs(vDY)

For j = 1 To vDeltaT
SetDot Margin(0) + vStartX + j * vDX / vDeltaT, Margin(2) + vStartY + j * vDY / vDeltaT
Next

vStartX = vStartX + vDX

vStartY = vStartY + vDY
End If
Next
End Sub

Public Sub Output()

Response.Expires = -9999
Response.AddHeader "pragma", "no-cache"
Response.AddHeader "cache-ctrol", "no-cache"
Response.ContentType = "image/gif"

' �ļ�����
Response.BinaryWrite ChrB(Asc("G")) & ChrB(Asc("I")) & ChrB(Asc("F"))
' �汾��Ϣ
Response.BinaryWrite ChrB(Asc("8")) & ChrB(Asc("9")) & ChrB(Asc("a"))
' �߼���Ļ���
Response.BinaryWrite ChrB(Width Mod 256) & ChrB((Width \ 256) Mod 256)
' �߼���Ļ�߶�
Response.BinaryWrite ChrB(Height Mod 256) & ChrB((Height \ 256) Mod 256)

Response.BinaryWrite ChrB(128) & ChrB(0) & ChrB(0)
' ȫ����ɫ�б�
Response.BinaryWrite ChrB(255) & ChrB(255) & ChrB(255)

Response.BinaryWrite ChrB(0) & ChrB(85) & ChrB(255)

' ͼ���ʶ��
Response.BinaryWrite ChrB(Asc(","))

Response.BinaryWrite ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0)
' ͼ����
Response.BinaryWrite ChrB(Width Mod 256) & ChrB((Width \ 256) Mod 256)
' ͼ��߶�
Response.BinaryWrite ChrB(Height Mod 256) & ChrB((Height \ 256) Mod 256)

Response.BinaryWrite ChrB(0) & ChrB(7) & ChrB(255)

Dim x, y, i : i = 0
For y = 0 To Height - 1
For x = 0 To Width - 1
If Rnd < Noisy / 100 Then
Response.BinaryWrite ChrB(1-Graph(x, y))
Else
If x * (x-Width) = 0 Or y * (y-Height) = 0 Then
Response.BinaryWrite ChrB(Graph(x, y))
Else
If Graph(x-1, y) = 1 Or Graph(x, y) Or Graph(x, y-1) = 1 Then
Response.BinaryWrite ChrB(1)
Else
Response.BinaryWrite ChrB(0)
End If
End If
End If
If (y * Width + x + 1) Mod 126 = 0 Then
Response.BinaryWrite ChrB(128)
i = i + 1
End If
If (y * Width + x + i + 1) Mod 255 = 0 Then
If (Width*Height - y * Width - x - 1) > 255 Then
Response.BinaryWrite ChrB(255)
Else
Response.BinaryWrite ChrB(Width * Height Mod 255)
End If
End If
Next
Next

Response.BinaryWrite ChrB(128) & ChrB(0) & ChrB(129) & ChrB(0) & ChrB(59)

End Sub
End Class

Dim mCode
Set mCode = New Com_GifCode_Class
Session("GetCode") = mCode.Create()
mCode.Output()

Set mCode = Nothing
?>


<?php'�����ASP�ļ����ɿ���Ч��!



Call Com_CreatValidCode("ValidCode")

Sub Com_CreatValidCode(pSN)

     'Author: Layen
     'QQ: 84815733
     'E-mail: support@ssaw.net

     ' ��ֹ����
     Response.Expires = -9999 
     Response.AddHeader "Pragma","no-cache"
     Response.AddHeader "cache-ctrol","no-cache"
     Response.ContentType = "Image/BMP"

     Randomize

     Dim i, ii, iii

     Const cOdds = 8 ' �ӵ���ֵĻ���
     Const cAmount = 36 ' 暂无内容
     Const cCode = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"

     ' ��ɫ�����(�ַ���)
     Dim vColorData(1)
     vColorData(0) = ChrB(0) & ChrB(0) & ChrB(0)  ' ��0����0����0����ɫ��
     vColorData(1) = ChrB(250) & ChrB(236) & ChrB(211) ' ��250����236����211��ǳ��ɫ��

     ' �������ַ�
     Dim vCode(4), vCodes
     For i = 0 To 3
           vCode(i) = Int(Rnd * cAmount)
           vCodes = vCodes & Mid(cCode, vCode(i) + 1, 1)
     Next

     Session(pSN) = vCodes  '��¼��Session

     ' �ַ�����
     Dim vNumberData(35)
     vNumberData(0) = "1110000111110111101111011110111101001011110100101111010010111101001011110111101111011110111110000111"
     vNumberData(1) = "1111011111110001111111110111111111011111111101111111110111111111011111111101111111110111111100000111"
     vNumberData(2) = "1110000111110111101111011110111111111011111111011111111011111111011111111011111111011110111100000011"
     vNumberData(3) = "1110000111110111101111011110111111110111111100111111111101111111111011110111101111011110111110000111"
     vNumberData(4) = "1111101111111110111111110011111110101111110110111111011011111100000011111110111111111011111111000011"
     vNumberData(5) = "1100000011110111111111011111111101000111110011101111111110111111111011110111101111011110111110000111"
     vNumberData(6) = "1111000111111011101111011111111101111111110100011111001110111101111011110111101111011110111110000111"
     vNumberData(7) = "1100000011110111011111011101111111101111111110111111110111111111011111111101111111110111111111011111"
     vNumberData(8) = "1110000111110111101111011110111101111011111000011111101101111101111011110111101111011110111110000111"
     vNumberData(9) = "1110001111110111011111011110111101111011110111001111100010111111111011111111101111011101111110001111"
     vNumberData(10) = "1111011111111101111111101011111110101111111010111111101011111100000111110111011111011101111000100011"
     vNumberData(11) = "1000000111110111101111011110111101110111110000111111011101111101111011110111101111011110111000000111"
     vNumberData(12) = "1110000011110111101110111110111011111111101111111110111111111011111111101111101111011101111110001111"
     vNumberData(13) = "1000001111110111011111011110111101111011110111101111011110111101111011110111101111011101111000001111"
     vNumberData(14) = "1000000111110111101111011011111101101111110000111111011011111101101111110111111111011110111000000111"
     vNumberData(15) = "1000000111110111101111011011111101101111110000111111011011111101101111110111111111011111111000111111"
     vNumberData(16) = "1110000111110111011110111101111011111111101111111110111111111011100011101111011111011101111110001111"
     vNumberData(17) = "1000100011110111011111011101111101110111110000011111011101111101110111110111011111011101111000100011"
     vNumberData(18) = "1100000111111101111111110111111111011111111101111111110111111111011111111101111111110111111100000111"
     vNumberData(19) = "1110000011111110111111111011111111101111111110111111111011111111101111111110111110111011111000011111"
     vNumberData(20) = "1000100011110111011111011011111101011111110001111111010111111101101111110110111111011101111000100011"
     vNumberData(21) = "1000111111110111111111011111111101111111110111111111011111111101111111110111111111011110111000000011"
     vNumberData(22) = "1000100011110010011111001001111100100111110101011111010101111101010111110101011111010101111001010011"
     vNumberData(23) = "1000100011110011011111001101111101010111110101011111010101111101100111110110011111011001111000110111"
     vNumberData(24) = "1110001111110111011110111110111011111011101111101110111110111011111011101111101111011101111110001111"
     vNumberData(25) = "1000000111110111101111011110111101111011110000011111011111111101111111110111111111011111111000111111"
     vNumberData(26) = "1110001111110111011110111110111011111011101111101110111110111011111011101001101111011001111110001011"
     vNumberData(27) = "1000001111110111011111011101111101110111110000111111010111111101101111110110111111011101111000110011"
     vNumberData(28) = "1110000011110111101111011110111101111111111001111111111001111111111011110111101111011110111100000111"
     vNumberData(29) = "1000000011101101101111110111111111011111111101111111110111111111011111111101111111110111111110001111"
     vNumberData(30) = "1000100011110111011111011101111101110111110111011111011101111101110111110111011111011101111110001111"
     vNumberData(31) = "1000100011110111011111011101111101110111111010111111101011111110101111111010111111110111111111011111"
     vNumberData(32) = "1001010011110101011111010101111101010111110101011111001001111110101111111010111111101011111110101111"
     vNumberData(33) = "1000100011110111011111101011111110101111111101111111110111111110101111111010111111011101111000100011"
     vNumberData(34) = "1000100011110111011111011101111110101111111010111111110111111111011111111101111111110111111110001111"
     vNumberData(35) = "1100000011110111011111111101111111101111111110111111110111111111011111111011111111101110111100000011"

     ' ���ͼ���ļ�ͷ
     Response.BinaryWrite ChrB(66) & ChrB(77) & ChrB(230) & ChrB(4) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) &_
           ChrB(0) & ChrB(0) & ChrB(54) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(40) & ChrB(0) &_
           ChrB(0) & ChrB(0) & ChrB(40) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(10) & ChrB(0) &_
           ChrB(0) & ChrB(0) & ChrB(1) & ChrB(0)

     ' ���ͼ����Ϣͷ
     Response.BinaryWrite ChrB(24) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(176) & ChrB(4) &_
           ChrB(0) & ChrB(0) & ChrB(18) & ChrB(11) & ChrB(0) & ChrB(0) & ChrB(18) & ChrB(11) &_
           ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) &_
           ChrB(0) & ChrB(0)

     For i = 9 To 0 Step -1  ' 暂无内容
           For ii = 0 To 3  ' 暂无内容
                 For iii = 1 To 10 ' 暂无内容��
                 ' ���С����֡������ص����ͼ�����
                       If Rnd * 99 + 1 < cOdds Then ' �������ӵ�
                             Response.BinaryWrite vColorData(0)
                       Else
                             Response.BinaryWrite vColorData(Mid(vNumberData(vCode(ii)), i * 10 + iii, 1))
                       End If
                 Next
           Next
     Next
End Sub
?>


