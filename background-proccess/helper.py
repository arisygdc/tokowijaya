def x_merge(rekomendasipek, pek):
    rekomendasipek_x = []
    for i in range(len(rekomendasipek)):
        rekomendasipek_x.append([
            findPekId(pek, rekomendasipek[i][0]),
            rekomendasipek[i][1],
            rekomendasipek[i][2]
        ])
    return rekomendasipek_x

def findPekId(peks, target):
    for i in range(len(peks)):
        if peks[i] != target:
            continue
        return i
    print("error find pek id", target)
