import { NextApiRequest, NextApiResponse } from "next"
import fs from "fs"
import path from "path"

function getAllImagesInFolder(folderPath: string): string[] {
  const files = fs.readdirSync(folderPath)
  const imageExtensions = [".png", ".jpg", ".jpeg", ".gif", ".bmp", ".webp"] // Add more extensions if needed
  const imageFiles: string[] = []

  files.forEach((file) => {
    const filePath = path.join(folderPath, file)
    const fileExtension = path.extname(filePath).toLowerCase()

    if (fs.statSync(filePath).isFile() && imageExtensions.includes(fileExtension)) {
      imageFiles.push(filePath)
    }
  })

  return imageFiles
}

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  const folderPath = "../../images" // Replace this with your folder path
  const images = getAllImagesInFolder(folderPath)
  res.status(200).json({ images })
}
