def predikat_kinerja(hasil_kerja, perilaku):
    if hasil_kerja == 'diatas ekspektasi' and perilaku == 'diatas ekspektasi':
        return 'Sangat Baik'
    elif hasil_kerja == 'sesual ekspektasi' and perilaku == 'diatas ekspektasi':
        return 'Butuh perbaikan'
    elif hasil_kerja == 'dibawah ekspektasi' and perilaku == 'diatas ekspektasi':
        return 'Sangat Kurang'
    elif hasil_kerja == 'diatas ekspektasi' and perilaku == 'sesual ekspektasi':
        return 'Baik'
    elif hasil_kerja == 'sesual ekspektasi' and perilaku == 'sesual ekspektasi':
        return 'Baik'
    elif hasil_kerja == 'dibawah ekspektasi' and perilaku == 'sesual ekspektasi':
        return 'Butuh perbaikan'
    elif hasil_kerja == 'diatas ekspektasi' and perilaku == 'dibawah ekspektasi':
        return 'Sangat Baik'
    elif hasil_kerja == 'sesual ekspektasi' and perilaku == 'dibawah ekspektasi':
        return 'Kurang/ misconduct'
    elif hasil_kerja == 'dibawah ekspektasi' and perilaku == 'dibawah ekspektasi':
        return 'Kurang/ misconduct'

print(predikat_kinerja('diatas ekspektasi', 'diatas ekspektasi'))
print(predikat_kinerja('sesual ekspektasi', 'diatas ekspektasi'))
print(predikat_kinerja('dibawah ekspektasi', 'diatas ekspektasi'))
