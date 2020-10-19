for num in range(101): # ou pede para o usuario digitar o valor.
    div = 0
    for x in range(1, num +1):
        resto = num % x
        if resto == 0:
            div += 1
    if div == 2:
     print(num)

# a = int(input('Digite um numero'))
# div = 0
# for x in range(1, a+1):
#     resto  = a % x
#     print(x, resto)
#     if resto == 0 :
#         div = div + 1
# if div == 2:
#     print('O numero{} é primo '.format(a))
# else:
#     print('Numero {} não primo '.format(a))