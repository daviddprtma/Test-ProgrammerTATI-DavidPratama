def helloworld(n):
    output = []
    for i in range(1, n + 1):
        output.append(str(i))

        if i % 4 == 0 and i % 5 == 0:
            output.append("helloworld")
        elif i % 4 == 0:
            output.append("hello")
        elif i % 5 == 0:
            output.append("world")

    print(" ".join(output))


helloworld(1)
helloworld(2)
helloworld(3)
helloworld(4)
helloworld(5)
helloworld(6)
